package com.aula.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import com.aula.modelos.ClienteBarbearia;
import com.aula.negocio.ClienteServico;




@Controller
public class ClienteController {


	@RequestMapping(value = "/cadastro_clientes", method = RequestMethod.GET)
	public String cadastro_clientes() {		
		return "cadastro_clientebarbearia";
	}
	@RequestMapping(value = "/listar", method = RequestMethod.GET)
	public String listar_clientes() {		
		return "listarcliente";
	}
	@RequestMapping(value = "/editar/{id}", method = RequestMethod.GET)
	public String editar_clientes(@PathVariable("id") Integer id,Model model) {
		model.addAttribute("id", id);
	
		return "editarcliente";
	}

	@RequestMapping(method = RequestMethod.GET, value = "deletar/{id}")
    public String remover(@PathVariable("id") Integer id) {
		ClienteServico clienteServico = new ClienteServico();
		clienteServico.deletar(id);
        return "listarcliente";
    }
	@RequestMapping(method = RequestMethod.POST, value = "/editar")
    public String editar(
    		@RequestParam(name = "nome") String nome,
    		@RequestParam(name = "id") Integer id,
			@RequestParam(name = "telefone") String telefone,
			@RequestParam(name = "email") String email,
			@RequestParam(name = "data") String data,
			@RequestParam(name = "hora") String hora,
			@RequestParam(name = "servico") String servico,
			Model model) {
		ClienteServico clienteServico = new ClienteServico();
		ClienteBarbearia cliente = new ClienteBarbearia();
		model.addAttribute("nome", nome);
		model.addAttribute("telefone", telefone);
		model.addAttribute("email", email);
		model.addAttribute("data", data);
		model.addAttribute("hora", hora);
		model.addAttribute("servico", servico);


		cliente.nome = nome;
		cliente.email = email;
		cliente.telefone = telefone;
		cliente.data = data;
		cliente.horario = hora;
		cliente.servico = servico;
		cliente.id = id;

		clienteServico.atualizar(cliente);
        return "listarcliente";
    }
	@RequestMapping(value = "/cadastrar_clientebarberia", method = RequestMethod.POST)
	public String cadastraCliente(

			@RequestParam(name = "nome") String nome,
			@RequestParam(name = "telefone") String telefone,
			@RequestParam(name = "email") String email,
			@RequestParam(name = "data") String data,
			@RequestParam(name = "hora") String hora,
			@RequestParam(name = "servico") String servico,
		
			Model model) {	
		ClienteBarbearia cliente = new ClienteBarbearia();
		ClienteServico clienteServico = new ClienteServico();
		model.addAttribute("nome", nome);
		model.addAttribute("telefone", telefone);
		model.addAttribute("email", email);
		model.addAttribute("data", data);
		model.addAttribute("hora", hora);
		model.addAttribute("servico", servico);


		cliente.nome = nome;
		cliente.email = email;
		cliente.telefone = telefone;
		cliente.data = data;
		cliente.horario = hora;
		cliente.servico = servico;

		String retornoServico = clienteServico.cadastrarCliente(cliente);
		if(retornoServico.equals("")) { 
			model.addAttribute("MENSAGEM", "Enviado com sucesso");
			return "cadastro_clientebarbearia";
		}else {
			model.addAttribute("MENSAGEM", retornoServico);	
			return "cadastro_clientebarbearia";
		}

	
	}
}
