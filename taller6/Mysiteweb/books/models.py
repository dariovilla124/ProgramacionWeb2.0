from operator import mod
from unicodedata import category
from django.db import models

class Person(models.Model):
    primerNombre = models.CharField(max_length=30)
    segundoNombre = models.CharField(max_length=30)

class Autor(models.Model):
    primerNombre = models.CharField(max_length=30)
    segundoNombre = models.CharField(max_length=30)
    pais = models.CharField(max_length=30)

class Categoria(models.Model):
    nombre = models.CharField(max_length=30)

class Libro(models.Model):
    autor= models.ForeignKey(Autor, on_delete=models.CASCADE)
    categoria = models.ForeignKey(Categoria, on_delete=models.CASCADE)
    titulo = models.CharField(max_length=30)
    descripcion = models.CharField(max_length=30)

    