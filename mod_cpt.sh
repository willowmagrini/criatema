#!/bin/bash

# cria o cpt
# uso: mod_cpt slug singular plural  [0|1] tema
# singular: o nome do cpt no singular
# plural: o nome do cpt no plural
# 0 significa que o nome é masculino e 1 feminino
# tema: o tema a ser adicionado o textdomain (opcional, padrão:odin)



slug=$1;
singular=$2;
plural=$3;
genero=$4;
tema=$5;
if [ -z "$tema" ];
	then
		tema="odin"
fi
if [ $genero  -eq 0 ]
	then
		tod="Todos"
		nov="Novo"
		nenh="Nenhum"

	else
		tod="Todas"
		nov="Nova"
		nenh="Nenhuma"

fi

 sed 's/SINGULAR/'$singular'/g' cpt.mod | sed 's/PLURAL/'$plural'/g' | sed 's/SLUG/'$slug'/g'  | sed 's/TOD/'$tod'/g' | sed 's/NENH/'$nenh'/g' | sed 's/NOV/'$nov'/g' | sed 's/TEMA/'$tema'/g' >> ~/themes/$tema/inc/custom-post.php

 # >> ~/themes/lao/inc/custom-post.php

