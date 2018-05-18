package app;

import entidade.Cliente;

public class AppTest {
	public static void main(String[] args) {
		Cliente cliente; // referência do objeto
		cliente = new Cliente(); // criação da instância do objeto
		
		cliente.setId = (1);
		cliente.setNome = ( "Karina");
		cliente.setEmail = ("karina@gmail.com");
		
		System.out.println(cliente.getNome());
	}

}
