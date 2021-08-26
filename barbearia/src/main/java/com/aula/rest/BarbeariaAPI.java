package com.aula.rest;


import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import com.aula.modelos.ClienteBarbearia;

import com.aula.dados.ClienteBarbeariaRepositorio;

import io.swagger.annotations.ApiOperation;

@RestController
public class BarbeariaAPI {

	
	
	@Autowired
	ClienteBarbeariaRepositorio servico;
	
	@ApiOperation(value="Salva os clientes", response = List.class)
	@RequestMapping(value= "/clientesb", method=RequestMethod.POST, produces = "application/json")
	public ResponseEntity<Integer> salvar(@RequestBody ClienteBarbearia cliente){		
		return new ResponseEntity<>(servico.salvar(cliente),HttpStatus.OK);		
	}

	@ApiOperation(value="Lista todos os clientes", response = ClienteBarbearia.class)
	@RequestMapping(value= "/clientesb", method=RequestMethod.GET, produces = "application/json")
	public ArrayList<ClienteBarbearia> listar(){
		return servico.listar();
	}

	@ApiOperation(value="Busca um cliente pelo id", response = ClienteBarbearia.class)
	@RequestMapping(value= "/clientesb/{id}", method=RequestMethod.GET, produces = "application/json")
	public ResponseEntity<ClienteBarbearia> buscar(@PathVariable("id") Integer id){
		try {
			return new ResponseEntity<>(servico.buscar(id),HttpStatus.OK);
		}catch(Exception e) {
			System.out.println("Este ID " + id + " não é reconhecido pela minha API");
			return null;
		}
	}

	@ApiOperation(value="Apaga o cliente pelo ID", response = ClienteBarbearia.class)
	@RequestMapping(value= "/clientesb/{id}", method=RequestMethod.DELETE, produces = "application/json")
	public ResponseEntity<Void> deletar(@PathVariable("id") Integer id){
		servico.deletar(id);
		return new ResponseEntity<>(HttpStatus.OK);
	}

	@ApiOperation(value="Atualiza um cliente", response = ClienteBarbearia.class)
	@RequestMapping(value= "/clientesb", method=RequestMethod.PUT, produces = "application/json")
	public ResponseEntity<Void> atualizar(@RequestBody ClienteBarbearia clientes){		
		servico.atualizar(clientes);
		return new ResponseEntity<>(HttpStatus.OK);		
	}




}