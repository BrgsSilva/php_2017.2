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

			System.out.print("Informe o nome:");
			nome = scan.nextLine();

			System.out.print("Informe o telefone:");
			telefone = Long.parseLong(scan.nextLine());
			//telefone = new Long(scan.nextLine());

			System.out.print("Informe a idade:");
			idade = Integer.parseInt(scan.nextLine());
			// idade = new Integer(scan.nextLine());

			System.out.print("Informe a altura:");
			altura = Double.parseDouble(scan.nextLine());
			// altura = new Double(scan.nextLine());

			System.out.print("Informe o sexo(M|F)");
			sexo = scan.nextLine();
		}

		System.out.println("O dados informados foram:\n" + "nome:" + nome + "\nTelefone:" + telefone + "\nIdade:"
				+ idade + "\nAltura:" + altura + "\nSexo:" + sexo);
	}
}
