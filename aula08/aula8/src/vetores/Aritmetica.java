package vetores;

public class Aritmetica {
	/**
	 * @param valores - é  uma definaição de vetor com o parametro
	 **/
	public double somar( double...valores) {
		
		double resultado = 0;
		 
		for( double v: valores) {
			resultado += v;
			
		}
	
		//System.out.println("O total  é :" + resultado);
		return resultado;
	}

	public double subtracao(double...valores){
		
		double resultado = valores[0];
		 
		for(int i = 1; i < valores.length; i++) {
			resultado -= valores[i];
			
		
	
		//System.out.println("O total  é :" + resultado);
		return resultado;
	}
	 public double multiplicacao(double...valores){
		 
		 double  resultado = 1;
		 
		 for(double v: valores) {
			 
			 resultado *= v;
		 }
	 }
	 
	 public double dividir( double...valores) {
			
			double resultado =valores[0];
			 
			for(int i= 1; i< valores.length; i++) {
				resultado /= valores[i];
				
			}
		
			//System.out.println("O total  é :" + resultado);
			return resultado;
		
	}
}



