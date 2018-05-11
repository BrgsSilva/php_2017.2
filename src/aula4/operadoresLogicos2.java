package aula4;

	public class operadoresLogicos2 {
	
		public static void main(String[] args) {
		
			double nota1 = 5.0;
			double nota2 = 6.0;
			double nota3 = 5.0;
			double nota4 = 7.5;
			double frequencia = 77.2;
			
			boolean status = true;
			
			double media = (nota1 + nota2 + nota3 + nota4) / 4;
			
			status = ((media >= 6.0) && (frequencia >= 75)) ? true : false;
			
			if(!status)
				System.out.println("Reprovado");
			else
				System.out.println("Aprovado");
		}
	
	}
 
	/*operador de negação */