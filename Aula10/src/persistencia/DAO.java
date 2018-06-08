package persistencia;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

//DAO - Data Acess Object

public class DAO {
	
	public DAO() {
		
		try {
			//nome da Classe de conexão com banco(MySQL)
			Class.forName("com.mysql.jdbc.Driver");		
		}catch(ClassNotFoundException e) {
			e.printStackTrace();
		}
	}
	
	protected Connection abreConexao() throws SQLException {
		Connection conn  = DriverManager.getConnection("jdbc:mysql://localhost:3306/db_aula10","root","");
		
		return conn;
		
		
	}
	
	public static void main(String[] args) {
		DAO dao = new DAO();
		
		try {
			dao.abreConexao();
			System.out.println("Conexao aberta!");
		} catch (SQLException e) {
			
			e.printStackTrace();
			System.out.println("Erro ao abrir conexão");
		}
		
	}
}

