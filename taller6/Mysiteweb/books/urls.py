from unicodedata import name
from django.urls import path
from .import views 
from django.contrib import admin


urlpatterns = [
    path('', views.home, name='home'),
    path('books/', views.index, name='index'),
    path('autores/', views.autores, name='autores'),
    path('autores/nuevo/', views.crear_auroes, name='nuevos_auores')
]

