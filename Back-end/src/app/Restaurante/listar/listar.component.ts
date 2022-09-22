import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import {ServiceService} from '../../Service/service.service2'
import { Restaurante } from 'src/app/Modelo/Restaurante';

@Component({
  selector: 'app-listar',
  templateUrl: './listar.component.html',
  styleUrls: ['./listar.component.css']
})
export class ListarComponent implements OnInit {
  
  restaurantes:Restaurante[] | undefined;
  constructor(private service:ServiceService, private router:Router ) { }

  ngOnInit(): void {
    this.service.getRestaurante()
    .subscribe(data=>{
       this.restaurantes = data;
    }) 
  }
  Edit(restaurante:Restaurante):void{
    localStorage.setItem("id",restaurante.id.toString());
    this.router.navigate(["edit"]);

  }  

  Delete(restaurante:Restaurante){
    this.service.deleteRestaurante(restaurante)
    .subscribe(data=>{
      this.restaurantes= this.restaurantes.filter(p=>p!==restaurante);
      alert("Restaurante eleminado!!");
    })
  }

}