<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
//LC_ALL pede para mudar toda configuração para o idioma informado.
//"pt_BR" para windows, "pt_BR.utf-8" padrão utf8 e "portuguese" para linux.

echo ucwords(strftime("%A %B "));//formatação da função strftime é diferente da função date.


?>