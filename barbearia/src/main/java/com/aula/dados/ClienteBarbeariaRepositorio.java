package com.aula.dados;

import java.util.ArrayList;
import java.util.List;

//import org.springframework.stereotype.Service;

import com.aula.modelos.ClienteBarbearia;

//@Service
public class ClienteBarbeariaRepositorio {

	static List<ClienteBarbearia> lista = new ArrayList<>();


	static int contadorId = 1;
	
	public Integer salvar(ClienteBarbearia cliente) {
		cliente.id = contadorId++;
		
		lista.add(cliente);
		
		return cliente.id;
	}

	public static List<ClienteBarbearia> listar(){
		
		return lista;
	}

	public void deletar(Integer id) {
		lista.removeIf(obj -> obj.id == id);
	}

	public void atualizar(ClienteBarbearia cliente) {
		lista.removeIf(obj -> obj.id == cliente.id);
		lista.add(cliente);
	}
	

}