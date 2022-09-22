const express = require('express')
const routes = express.Router()


module.exports = routes



routes.get('/', (req, res) => {
    req.getConnection((err, conn) => {
        if (err) return res.send(err)

        conn.query('SELECT * FROM new_table', (err, rows) => {
            if (err) return res.send(err)

            res.json(rows)
        })
    })
})

routes.post('/', (req, res) => {
    req.getConnection((err, conn) => {
        if (err) return res.send(err)
        conn.query('INSERT INTO new_table set ?', [req.body], (err, rows) => {
            if (err) return res.send(err)

            res.send('La persona ha sido registrado!!')
        })
    })
})

routes.delete('/:id', (req, res) => {
    req.getConnection((err, conn) => {
        if (err) return res.send(err)
        conn.query('DELETE FROM new_table WHERE id = ?', [req.params.idrestaurants], (err, rows) => {
            if (err) return res.send(err)

            res.send('La persona ha sido eliminado!!')
        })
    })
})

routes.put('/:id', (req, res) => {
    req.getConnection((err, conn) => {
        if (err) return res.send(err)
        conn.query('UPDATE new_table set ? WHERE idrestaurants = ?', [req.body,req.params.idrestaurants], (err, rows) => {
            if (err) return res.send(err)

            res.send('La persona ha sido actualizado!!')
        })
    })
})