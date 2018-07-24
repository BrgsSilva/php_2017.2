package banco;


import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import modelo.Produto;

public class ProdutoDAO {
	
	private Connection conexao;
	
	public ProdutoDAO() {
		
		conexao = new FabricaDeConexao().pegaConexao();
		
	}
	
	public void registrar (Produto produto)throws SQLException {
		
		PreparedStatement stmt = null;
		
		try {
			stmt = conexao.prepareStatement(" insert into produto values(null, ?, ?, ?, ?, ?");

			stmt.setString(1, produto.getNmProduto());
			stmt.setString(2, produto.getDescProduto());
			stmt.setInt(3, produto.getQuantidade());
			stmt.setDouble(4, produto.getPreco());
			stmt.setString(5, produto.getImg());
			
			stmt.executeUpdate();
			
		} finally {
			if (stmt != null)
				stmt.close();
			if (conexao != null)
				conexao.close();
		}
	
	}

	
    public void alterar(Produto produto) throws SQLException{
    	
    	 PreparedStatement stmt = null;
    	 
    	 try {
    		 stmt = conexao.prepareStatement("update produto set nmProduto =?, descProduto = ?, quantidade = ?, preco = ?,  img= ? where id= ?");
    		 
    		stmt.setString(1, produto.getNmProduto());
 			stmt.setString(2, produto.getDescProduto());
 			stmt.setInt(3, produto.getQuantidade());
 			stmt.setDouble(4, produto.getPreco());
 			stmt.setString(5, produto.getImg());
 			
 			stmt.executeUpdate();
			
 		} finally {
 			if (stmt != null)
 				stmt.close();
 			if (conexao != null)
 				conexao.close();
 		}
    		 
     }
    
    public void excluir(Produto produto) throws SQLException{
    	
    	PreparedStatement stmt = null;
    	
    	try {
    		stmt = conexao.prepareStatement("DELETE FROM produto WHERE id = ?");
    		stmt.setString(1, produto.getNmProduto());
 			stmt.setString(2, produto.getDescProduto());
 			stmt.setInt(3, produto.getQuantidade());
 			stmt.setDouble(4, produto.getPreco());
 			stmt.setString(5, produto.getImg());
    		
    	}
    	
    	finally {
    		if (stmt != null)
 				stmt.close();
 			if (conexao != null)
 				conexao.close();
    	}
    	
    }
 }

