//inicializaciones----------------------------------------------------------------
const express = require('express')
const mysql = require('mysql')
const myconn = require('express-myconnection')
const routes = require('./routes')
const { use } = require('./routes')

const app=express()
app.set('port', process.env.PORT || 9000)
const dbOptions={
    host:'localhost',
    PORT: 3306,
    user:'root',
    password: '1098152129Jdvb',
    database: 'restaurant'
}

//midelware------------------------------------------------------------------------
app.use(myconn(mysql, dbOptions, 'request'))
app.use(express.json())

//rutas---------------------------------------------------------------------------
app.get('/', (req, res)=>{
    res.send('Bienvenido a mi APPI')
})

app.use('/api', routes)

//como correr el server------------------------------------------------------------
app.listen(app.get('port'), ()=>{
    console.log('server corriendo en el puerto', app.get('port'))
})
