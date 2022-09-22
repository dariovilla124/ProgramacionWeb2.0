package com.init.products.rest;


import java.util.HashMap;
import java.util.List;
import java.util.Map;

import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;


import com.init.products.entitys.Restorant;
import com.init.products.exeption.ResourceNotFoundException;
import com.init.products.repository.restaurantRepository;


@CrossOrigin(origins = "http://localhost:4200", maxAge = 3600)
@RestController
@RequestMapping("/api/v1")


public class RestorantREST {
		

	@Autowired
	private restaurantRepository restaurantrepository;
	
	@GetMapping("/restorant")
	public List<Restorant> getAllRestorant(){
	return restaurantrepository.findAll();
		
	}
		
	@GetMapping("/restorant/{id}")
	public ResponseEntity<Restorant> getRestorantById(@PathVariable(value = "id") Long Restaurantid)
		throws ResourceNotFoundException {
		Restorant restorant = restaurantrepository.findById(Restaurantid)
				.orElseThrow(() -> new ResourceNotFoundException("Restaurante no encontrado para el id :: " + Restaurantid));
				return ResponseEntity.ok().body(restorant);
	}
	
	@PostMapping("/restorant")
	public Restorant createRestaurant(@Valid @RequestBody Restorant restorant) {
		return restaurantrepository.save(restorant);
		
	}
		
	
	@PutMapping("/restorant/{id}")
	public ResponseEntity<Restorant> updateRestorant(@PathVariable(value = "id") Long Restaurantid,
	@Valid @RequestBody Restorant restorantDetails ) throws ResourceNotFoundException {
		Restorant restorant = restaurantrepository.findById(Restaurantid)
				.orElseThrow(() -> new ResourceNotFoundException("Restaurante no encontrado para el id :: " + Restaurantid));
		
		restorant.setNombre(restorantDetails.getNombre());
		restorant.setDireccion(restorantDetails.getDireccion());
		restorant.setTematica(restorantDetails.getTematica());
		restorant.setContacto(restorantDetails.getContacto());
		restorant.setImagen(restorantDetails.getImagen());
		final Restorant updateRestorant = new Restorant();
		return ResponseEntity.ok(updateRestorant);
		
	}
	
	@DeleteMapping("/restorant/{id}")
	public Map<String, Boolean> deleteRestorant(@PathVariable(value = "id") Long Restaurantid)
			throws ResourceNotFoundException{
		Restorant restorant = restaurantrepository.findById(Restaurantid)
				.orElseThrow(() -> new ResourceNotFoundException("Restaurante no encontrado para el id ::" + Restaurantid));
		
		restaurantrepository.delete(restorant);
		Map<String, Boolean> response = new HashMap<>();
		response.put("deleted", Boolean.TRUE);
		return response;
		
		
	}
	
	
}



