import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ServiceService } from 'src/app/Service/service.service2';
import { Restorant } from 'src/app/Modelo/Restaurante';


@Component({
  selector: 'app-add',
  templateUrl: './add.component.html',
  styleUrls: ['./add.component.css']
})
export class AddComponent implements OnInit {

  restaurante: Restorant = new Restorant();

  constructor(private router:Router, private service:ServiceService) { }

  ngOnInit(): void {
  }
  
  Guardar(){
    this.service.createRestaurante(this.restaurante)
    .subscribe(data=>{
      alert("se agrego con exito...!!!");
      this.router.navigate(["listar"]);
    })

  }
}