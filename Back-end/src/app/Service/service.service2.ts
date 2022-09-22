import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http'
import {Restaurante} from '../Modelo/Restaurante'
  

@Injectable({
  providedIn: 'root'
})
export class ServiceService {

  constructor(private http:HttpClient) { }

  Url='http://localhost:8080/api/v1/Restaurante';

  getRestaurante(){
    return this.http.get<Restaurante[]>(this.Url);
  }

  createRestaurante(restaurante:Restaurante){
    return this.http.post<Restaurante>(this.Url,restaurante);
  }


  getRestauranteid(id: number){
    return this.http.get<Restaurante>(this.Url+"/"+id);
  }


  updateRestaurante(restaurante:Restaurante) {
    return this.http.put(this.Url+"/"+restaurante.id, restaurante);
  }

  

  deleteRestaurante(restaurante:Restaurante) {
    return this.http.delete(this.Url+"/"+restaurante.id);
  }

}
