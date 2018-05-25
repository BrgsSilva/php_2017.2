package Informe;

import java.util.Scanner;

public class InformeUsuario {
	public static void main(String[] args) {

		String nome;
		long telefone;
		int idade;
		double altura;
		String sexo;

		try (Scanner scan = new Scanner(System.in)) {

			System.out.print("Informe o nome");
			nome = scan.nextLine();

			System.out.print("Informe o telefone");
			telefone = scan.nextLong();

			System.out.print("Informe a idade");
			idade = scan.nextInt();

			System.out.print("Informe a altura");
			altura = scan.nextDouble();

			System.out.print("Informe o sexo(M|F)");
			sexo = scan.nextLine();
		}

		System.out.println("O dados informados foram:\n" + "nome:" + nome + "\nTelefone:" + telefone + "\nIdade:"
				+ idade + "\nAltura:" + altura + "\nSexo:" + sexo);
	}
}
