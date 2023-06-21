// Importe o Axios
import axios from 'axios';

// Defina as URLs das suas rotas
const baseUrl = '/api'; // Substitua pelo URL da sua aplicação Laravel com o prefixo /api
const indexUrl = `${baseUrl}/books`;
const createUrl = `${baseUrl}/books`;
const updateUrl = `${baseUrl}/books`;
const deleteUrl = `${baseUrl}/books`;

// Função para buscar os livros
function getBooks() {
  return axios.get(indexUrl)
    .then(response => response.data)
    .catch(error => {
      console.error('Erro ao buscar os livros:', error);
      throw error;
    });
}

// Função para criar um novo livro
function createBook(bookData) {
  return axios.post(createUrl, bookData)
    .then(response => response.data)
    .catch(error => {
      console.error('Erro ao criar o livro:', error);
      throw error;
    });
}

// Função para atualizar um livro existente
function updateBook(bookId, bookData) {
  const url = `${updateUrl}/${bookId}`;
  return axios.put(url, bookData)
    .then(response => response.data)
    .catch(error => {
      console.error('Erro ao atualizar o livro:', error);
      throw error;
    });
}

// Função para excluir um livro
function deleteBook(bookId) {
  const url = `${deleteUrl}/${bookId}`;
  return axios.delete(url)
    .then(response => response.data)
    .catch(error => {
      console.error('Erro ao excluir o livro:', error);
      throw error;
    });
}

// Exporte as funções para uso em outros arquivos
export { getBooks, createBook, updateBook, deleteBook };
