from typing_extensions import Required
from django import forms
from .models import Autor




class Autorformulario(forms.ModelForm):

        class Meta:
            model= Autor

            fields = [
                'primerNombre',
                'segundoNombre',
                'pais',
            ]
            labels = {
                'primerNombre': 'Nombre',
                'segundoNombre': 'Apellidos',
                'pais': 'Pais',
            }
            widgets ={
                'primerNombre':forms.TextInput(attrs={'class':'form.control','required':''}),
                'segundoNombre':forms.TextInput(attrs={'class':'form.control','required':''}),
                'pais':forms.TextInput(attrs={'class':'form.control','required':''}),
            }