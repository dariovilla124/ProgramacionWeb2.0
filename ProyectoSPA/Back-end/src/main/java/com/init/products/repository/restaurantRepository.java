package com.init.products.repository;


import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.init.products.entitys.Restorant;

@Repository
public interface restaurantRepository extends JpaRepository<Restorant, Long> {

}
