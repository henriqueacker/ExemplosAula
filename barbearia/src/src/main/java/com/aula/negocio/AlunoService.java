package com.aula.negocio;

import java.util.ArrayList;

import org.springframework.stereotype.Service;

import com.aula.modelos.AlunoModelo;



@Service
public class AlunoService {
	ArrayList<AlunoModelo> lista = new ArrayList<>();
	static int contadorId = 1;
	
	public Integer salvar(AlunoModelo aluno) {
		aluno.id = contadorId++;
		lista.add(aluno);
		return aluno.id;
	}
	
	public ArrayList<AlunoModelo> listar(){
		return lista;
	}
	
	public AlunoModelo buscar(Integer id) {
		for(AlunoModelo aluno: lista) {
			if(aluno.id == id) {
				return aluno;
			}
		}
		return null;
	}
	
	public void deletar(Integer id) {
		lista.removeIf(obj -> obj.id == id);
	}
	
	public void atualizar(AlunoModelo aluno) {
		lista.removeIf(obj -> obj.id == aluno.id);
		lista.add(aluno);
	}
}
