package poo;

public class Appteste {
	public static void main(String[] args) {
		/*
		 * Pessoa  p - criação da referência da Pessoa aonde o 'p' é essa referência.
		 * 
		 * new Pessoa()- criação da Instância(Objeto), aonde utilizamos a palavra new para criar.
		 */
		
		/**
		 * @var p- Dá  acesso ao recursos da classe Pessoa
		 */
		Pessoa p = new Pessoa();
		
		p.setNome("José");
		p.setSexo("Masculino");
		p.setcorDapele("Caucasiano");
		p.setAltura(1.74);
		p.setIdade(28);
		
	
		System.out.println(p.getNome()+"\n" + p.getSexo()+"\n" + p.getcorDapele()+"\n" + p.getAltura()+"\n" + p.getIdade());
}
}