const port = 3001;

const http = require("http").Server(),
      express = require("express"),
      io = require("socket.io")(http,{
          allowEIO3 : true,
          cors: {
              origin: ["http://localhost:8000"],
              credentials : true
          }
      }),
      app = express(),
      cors = require('cors'),
      mongodb = require('mongodb').MongoClient,
      url = 'mongodb://localhost:27017';
      dbname = 'chatDB';

http.listen(port,()=>{
    console.log("Ejecutandose nuestra app con socket.io en node por el puerto", port);
})

io.on('connection', socket=>{
    console.log("Usuarios conectados via soket...");
    socket.on('chat',chat=>{
        mongodb.connect(url,(err, client)=>{
            if(err) console.log("No fue posible conectarse a la base de datos",err);
            const db = client.db(dbname);
            db.collection("chat").insertOne(chat).then((result)=>{
                io.emit("chat",chat); // en este envia mensaje a todos 
            });
        });
    });
    socket.on('historial',()=>{
        mongodb.connect(url,(err, client)=>{
            if(err) console.log("No fue posible conectarse a la base de datos",err);
            const db = client.db(dbname);
            db.collection("chat").find({}).toArray((err, msgs)=>{
                socket.emit('historial', msgs); // y aqui solo aquien solicita la informacion
            });
        });
    });
});
