import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http'
import {Restorant} from '../Modelo/Restaurante'
  

@Injectable({
  providedIn: 'root'
})
export class ServiceService {

  constructor(private http:HttpClient) { }

  Url='http://localhost:8080/api/v1/restorant';

  getRestaurante(){
    return this.http.get<Restorant[]>(this.Url);
  }

  createRestaurante(restaurante:Restorant){
    return this.http.post<Restorant>(this.Url,restaurante);
  }


  getRestauranteid(id: number){
    return this.http.get<Restorant>(this.Url+"/"+id);
  }


  updateRestaurante(restaurante:Restorant) {
    return this.http.put(this.Url+"/"+restaurante.id, restaurante);
  }

  

  deleteRestaurante(restaurante:Restorant) {
    return this.http.delete(this.Url+"/"+restaurante.id);
  }

}
