$(document).ready(function($){
  $('#data').mask('00/00/0000');
  $('#cpf').mask('000.000.000-00', {reverse: true});
  $('#tel').mask('(00) 00000-0000');  
  $('#dinheiro').mask('000.000.000.000.000,00', {reverse: true});
});