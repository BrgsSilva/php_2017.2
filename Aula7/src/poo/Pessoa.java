package poo;

//carecteristicas

//açoes

public class Pessoa {
	/*
	 * Os atributos definem as caracteristicas de uma pessoa
	 */
	private String nome;
	private String corDapele;
	private Double altura;
	private Integer idade;
	private String sexo;
	
	/* Os métodos definem as açoes de uma pessoa*/
	
	void andar() {}
	void correr() {}
	void comer() {}
	String falar() { return ""; }
	// void verificarLogin(){} -- não faz sentido
	
	// métodos get - servem para resgatar o valor do atributo
	
		public String getNome() {
			return nome;
			
	}
	
	// métodos set - servem para atribuir (inserir) o valor do atributo
		
		public void setNome(String nome) {
			this.nome = nome;
		
	}
	
		public String getcorDapele() {
			return corDapele;
	}
		
		public void setcorDapele(String corDapele) {
			this.corDapele = corDapele;
	}
		
		public Double getAltura() {
			return altura;
	}
		
		public void setAltura(Double altura) {
			this.altura = altura;
	}
		
		public Integer getIdade() {
			return idade;
	}
		
		public void setIdade(Integer idade) {
			this.idade = idade;	
	
	}
		
		public String  getSexo() {
			return sexo;
	}
		
		public void setSexo(String sexo) {
			this.sexo = sexo;
		}

}


