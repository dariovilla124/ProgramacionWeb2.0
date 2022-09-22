package com.init.products.entitys;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;


@Entity 
@Table(name="restorant")

public class Restorant {
	
	@Id
	@Column(name="id") 
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	private Long id;
	@Column(name="nombre", nullable=false, length=30)
	private String nombre;
	@Column(name="direccion", nullable=false, length=30)
	private  String direccion;
	@Column(name="contacto", nullable=true, length=15)
	private Long contacto;
	@Column(name="tematica", nullable=false, length=50)
	private String tematica;
	@Column(name="imagen", nullable=true)
	private byte[] imagen;
	
	
	public Restorant() {
		
	}
	
	public Restorant(String nombre, String direccion, Long contacto, byte[] imagen) {
		super();
		this.nombre = nombre;
		this.direccion = direccion;
		this.contacto=contacto;
		this.imagen = imagen;
	}
	
	public Long getId() {
		return id;
	}
	public String getNombre() {
		return nombre;
	}
	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	public String getDireccion() {
		return direccion;
	}
	public void setDireccion(String direccion) {
		this.direccion = direccion;
	}
	public Long getContacto() {
		return contacto;
	}
	public void setContacto(Long contacto) {
		this.contacto = contacto;
	}
	public String getTematica() {
		return tematica;
	}
	public void setTematica(String tematica) {
		this.tematica = tematica;
	}
	public void setId(Long id) {
		this.id = id;
	}

	public byte[] getImagen() {
		return imagen;
	}

	public void setImagen(byte[] imagen) {
		this.imagen = imagen;
	}
	

}
