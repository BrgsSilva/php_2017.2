package poo;

public class Appteste {
	public static void main(String[] args) {
		/*
		 * Pessoa  p - cria��o da refer�ncia da Pessoa aonde o 'p' � essa refer�ncia.
		 * 
		 * new Pessoa()- cria��o da Inst�ncia(Objeto), aonde utilizamos a palavra new para criar.
		 */
		
		/**
		 * @var p- D�  acesso ao recursos da classe Pessoa
		 */
		Pessoa p = new Pessoa();
		
		p.setNome("Jos�");
		p.setSexo("Masculino");
		p.setcorDapele("Caucasiano");
		p.setAltura(1.74);
		p.setIdade(28);
		
	
		System.out.println(p.getNome()+"\n" + p.getSexo()+"\n" + p.getcorDapele()+"\n" + p.getAltura()+"\n" + p.getIdade());
}
}