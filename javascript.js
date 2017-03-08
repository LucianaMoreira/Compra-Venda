function validacao() {
   if (document.form.nome.value=="") {
      alert("Por favor, preencha o campo Nome da Mercadoria");
      document.form.nome.focus();
      return false;
   }
else if (document.form.tipom.value=="") {
      alert("Por favor, preencha o campo Tipo de Mercadoria");
      document.form.tipom.focus();
      return false;
   }
else if (document.form.qtd.value=="") {
      alert("Por favor, preencha o campo Quantidade");
      document.form.qtd.focus();
      return false;
   }
else if (document.form.preco.value=="") {
      alert("Por favor, preencha o campo Preço");
      document.form.preco.focus();
      return false;
   }
else if (document.form.cli.value=="") {
      alert("Por favor, preencha o campo Nome do Cliente");
      document.form.cli.focus();
      return false;
   }
else if (document.form.email.value=="") {
      alert("Por favor, preencha o campo E-mail");
      document.form.email.focus();
      return false;
   }
 else (document.form.tipon[0].checked == false 
    && document.form.tipon[1].checked == false) {
    alert('Por favor, selecione o Tipo de Negócio');
    return false;
   }
}
