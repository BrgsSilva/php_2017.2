package model;

import java.util.List;

public class Cliente extends Pessoa {
	
	private static final long serialVersionUID = 1L;
	
	private String formaDePagamentos;
	private List<String>categoria;
	
	public Cliente() {
		super();
	}
	
	public Cliente(String nome, String cpf, String telefone, String logradouro, String bairro, String cidade,
			String estado, String cep, String formaDePagamentos, List<String> categoria) {
		super(nome, cpf, telefone, logradouro, bairro, cidade, estado, cep);
		this.formaDePagamentos = formaDePagamentos;
		this.categoria = categoria;
	}


	public Cliente(long id, String nome, String cpf, String telefone, String logradouro, String bairro, String cidade,
			String estado, String cep, String formaDePagamentos, List<String> categoria) {
		super(id, nome, cpf, telefone, logradouro, bairro, cidade, estado, cep);
		this.formaDePagamentos = formaDePagamentos;
		this.categoria = categoria;
	}

	public String getFormaDePagamentos() {
		return formaDePagamentos;
	}

	public void setFormaDePagamentos(String formaDePagamentos) {
		this.formaDePagamentos = formaDePagamentos;
	}

	public List<String> getCategoria() {
		return categoria;
	}

	public void setCategoria(List<String> categoria) {
		this.categoria = categoria;
	}

	@Override
	public String toString() {
		return "Cliente [formaDePagamentos=" + formaDePagamentos + ", categoria=" + categoria + ","
				+ super.toString() + "]";
	}
	
	
	
}

