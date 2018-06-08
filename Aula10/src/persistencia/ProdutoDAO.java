package persistencia;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import entidade.Produto;

public class ProdutoDAO extends DAO {

	private Connection conn;

	public ProdutoDAO() {
		try {
			// atribui a conexaõ aberta aoa atributo conn
			conn = abreConexao();

		} catch (SQLException e) {
			e.printStackTrace();
		}

	}

	public void salvar(Produto p) throws SQLException {
		PreparedStatement stmt = null;
		try {

			stmt = conn.prepareStatement("inserir int produto values (null,?, ?)");

			stmt.setString(1, p.getNome());
			stmt.setInt(2, p.getQuantidade());

			int flag = stmt.executeUpdate();

			if (flag == 0)
				throw new SQLException("Erro aoa grava no banco de dados");

		} finally {
			if (conn != null)
				conn.close();

			if (stmt != null)
				stmt.close();

		}

	}

	public static void main(String[] args) {

		ProdutoDAO dao = new ProdutoDAO();

		Produto produto = new Produto();
		produto.setQuantidade(10);

		try {
			dao.salvar(produto);
			;
			System.out.println("produto salvo com sucesso!");
		} catch (SQLException e) {
			e.printStackTrace();

		}

	}
}
