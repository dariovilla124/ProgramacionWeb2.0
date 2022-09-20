from audioop import reverse
from json import load
from multiprocessing import context
from re import template
from tkinter.tix import Form
from unittest import loader
from django.shortcuts import render
from django.http import HttpResponse, HttpResponseRedirect
from .models import Autor
from books import forms

def home(request):
    template = loader.get_template('index.html')
    context= {}
    return HttpResponse(template.render(context,request))

def autore(request):
    autores = Autor.objects.all()
    template = loader.get_template('books/autore.html')
    context = {'autores':autores}
    return HttpResponse(template.render(context,request))

def nuevo_autor(request):
    if request.method == 'POST':
        form = Autorformulario(request.POST)

        if form.is_valid():

        nombre = form.cleaned_data['primerNombre']
        apellido = form.cleaned_data['segundoNombre']
        pais = form.cleaned_data['pais']
        autor = Autor(primer_nombre = nombre,segundo_nombre= apellido, pais= pais)
        autor.save()
        return HttpResponseRedirect(reverse('autor'))
    else:
        form = Autorformulario()

    return render(request, 'books/crear_autores.hmtl', {'form':form})


def index(request):
    autores = Autor.bojects.all()
    template = loader.get_template('book/index.html')
    context = {
        'autores':autores,
    }
    return HttpResponse(template.render(context, request))

def home(request):
    template = loader.get_template('index.html')
    context = {}
    return HttpResponse(template.render(context, request))
    