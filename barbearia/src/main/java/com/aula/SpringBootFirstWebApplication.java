package com.aula;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.ComponentScan;


@SpringBootApplication
@ComponentScan("com.aula")
public class SpringBootFirstWebApplication {

	// classe para iniciar o projeto.
	
	public static void main(String[] args) {
		SpringApplication.run(SpringBootFirstWebApplication.class, args);		
	}	
	
}
