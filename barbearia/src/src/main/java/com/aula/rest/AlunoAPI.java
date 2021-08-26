package com.aula.rest;

import java.util.ArrayList;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import com.aula.modelos.AlunoModelo;
import com.aula.negocio.AlunoService;


import io.swagger.annotations.ApiOperation;
import io.swagger.annotations.ApiResponse;
import io.swagger.annotations.ApiResponses;



@RestController
public class AlunoAPI {

	@Autowired
	AlunoService servico;
	@ApiOperation(value = "Salva um aluno no sistema, nome, email, matricula são obrigatorios", response = ResponseEntity.class)
	@ApiResponses (value = {
			@ApiResponse(code = 200, message = "Aluno cadastrado com sucesso"),
			@ApiResponse(code = 405, message = "Aluno com problema de validação"),
	})
	@RequestMapping(value= "/alunos", method=RequestMethod.POST, produces = "application/json")
	public ResponseEntity<Integer> salvar(@RequestBody AlunoModelo aluno){		
		if(aluno.nome == "" || aluno.email == "" || aluno.matricula == null) {
			System.out.println(HttpStatus.METHOD_NOT_ALLOWED);
		}else {
			return new ResponseEntity<>(servico.salvar(aluno),HttpStatus.OK);
		}
		return null;
		
	}
	@ApiOperation(value = "Lista os alunos", response = ResponseEntity.class)
	@RequestMapping(value= "/alunos", method=RequestMethod.GET, produces = "application/json")
	public ArrayList<AlunoModelo> listar(){
		return servico.listar();
	}
	@ApiOperation(value = "Busca um aluno pelo ID", response = ResponseEntity.class)
	@RequestMapping(value= "/alunos/{id}", method=RequestMethod.GET, produces = "application/json")
	public ResponseEntity<AlunoModelo> buscar(@PathVariable("id") Integer id){
		return new ResponseEntity<>(servico.buscar(id),HttpStatus.OK);
	}
	@ApiOperation(value = "Deleta  um aluno no sistema", response = ResponseEntity.class)
	@RequestMapping(value= "/alunos/{id}", method=RequestMethod.DELETE, produces = "application/json")
	public ResponseEntity<Void> deletar(@PathVariable("id") Integer id){
		servico.deletar(id);
		return new ResponseEntity<>(HttpStatus.OK);
	}
	@ApiOperation(value = "Faz uma atualização dos dados do aluno", response = ResponseEntity.class)
	@RequestMapping(value= "/alunos", method=RequestMethod.PUT, produces = "application/json")
	public ResponseEntity<Void> atualizar(@RequestBody AlunoModelo aluno){		
		
		servico.atualizar(aluno);
		return new ResponseEntity<>(HttpStatus.OK);		
	}
}
