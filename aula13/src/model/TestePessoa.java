package model;

public class TestePessoa {
	// main() -> escreve main +crtl + espaco
	// identar o codigo -> crtl+shift + F
	
	public static void main(String[] args) {
		Pessoa claudemir = new Pessoa();
		claudemir.setId(1);
		claudemir.setNome("claudemir");
		claudemir.setCpf("123.456.789-00");
		
		Pessoa mimirzinho= new Pessoa();
		mimirzinho.setId(1);
		mimirzinho.setNome("raimundo");
		mimirzinho.setCpf("123.456.789-00");
		
		Pessoa claudemilson= new Pessoa();
		claudemilson.setId(1);
		claudemilson.setNome("raimundo");
		claudemilson.setCpf("123.456.789-00");
		
		
		if(claudemir.equals (mimirzinho))
			System.out.println("é Mimirzinho");
		else if(claudemir.equals(claudemilson))
			System.out.println("é mimirzinho");
		else
			System.out.println("Não é Mimirzinho");
			
		
	}

}
