<?php

namespace seeds\traits;

trait Assunto
{
    public function assuntoIniciais()
    {
        return [
            [
                'no_assunto' => 'INFORMÁTICA',
                'filhos' => [
                    ['no_assunto' => 'INTRODUÇÃO A INFORMÁTICA'],
                    ['no_assunto' => 'BANCO DE DADOS'],
                    ['no_assunto' => 'LÓGICA DE PROGRAMAÇÃO'],
                    ['no_assunto' => 'PROGRAMAÇÃO I'],
                    ['no_assunto' => 'PROGRAMAÇÃO II'],
                    ['no_assunto' => 'PROGRAMAÇÃO III'],
                ]
            ],
            [
                'no_assunto' => 'DIREITO ELEITORAL',
                'filhos' => [
                    ['no_assunto' => 'INTRODUÇÃO AO DIREITO ELEITORAL'],
                    ['no_assunto' => 'DIREITO DO ELEITOR'],
                    ['no_assunto' => 'PLEITO ELEITORAL'],
                ]
            ],
            [
                'no_assunto' => 'ADMINISTRAÇÃO GERAL',
                'filhos' => [
                    ['no_assunto' => 'INTRODUÇÃO A ADMINISTRAÇÃO GERAL'],
                    ['no_assunto' => 'TEORIA GERAL DA ADMINISTRAÇÃO'],
                    ['no_assunto' => 'ADMINISTRAÇÃO I'],
                ]
            ],
            [
                'no_assunto' => 'MATEMÁTICA',
                'filhos' => [
                    ['no_assunto' => 'TEORIA GERAL DA MATEMÁTICA'],
                    ['no_assunto' => 'TÓPICOS DE MATEMÁTICA AVANÇADA'],
                    ['no_assunto' => 'GEOMETRIA ANALÍTICA'],
                ]
            ],
            [
                'no_assunto' => 'CONHECIMENTOS BANCÁRIOS',
                'filhos' => [
                    ['no_assunto' => 'TEORIA GERAL DA ADMINISTRAÇÃO BANCÁRIA'],
                    ['no_assunto' => 'PROCEDIMENTOS BANCÁRIOS'],
                    ['no_assunto' => 'COMO DEIXAR O CLIENTE ESPERANDO DUAS HORAS NA FILA'],
                ]
            ],
            [
                'no_assunto' => 'DIREITO ADMINISTRATIVO',
                'filhos' => [
                    ['no_assunto' => 'INTRODUÇÃO AO DIREITO ADMINISTRATIVO'],
                    ['no_assunto' => 'DIREITO ADMINISTRATIVO I'],
                    ['no_assunto' => 'DIREITO ADMINISTRATIVO II'],
                ]
            ],
            [
                'no_assunto' => 'RACIOCÍNIO LÓGICO',
                'filhos' => [
                    ['no_assunto' => 'ALGORÍTIMOS'],
                    ['no_assunto' => 'RESOLUÇÃO DE PROBLEMAS LÓGICOS'],
                    ['no_assunto' => 'MÉTODOS DE RACIOCÍNIO LÓGICO'],
                ]
            ],
            [
                'no_assunto' => 'DIREITO CONSTITUCIONAL',
                'filhos' => [
                    ['no_assunto' => 'INTRODUÇÃO AO DIREITO CONSTITUCIONAL'],
                    ['no_assunto' => 'INTERPRETAÇÃO DE NORMAS CONSTITUCIONAIS'],
                    ['no_assunto' => 'DELIMITAÇÃO DE DIREITOS'],
                ]
            ],
            [
                'no_assunto' => 'PORTUGUÊS',
                'filhos' => [
                    ['no_assunto' => 'INTRODUÇÃO AO IDIOMA'],
                    ['no_assunto' => 'ADJUNTO ADNOMINAL'],
                    ['no_assunto' => 'SUBSTANTIVO PRIMITIVO'],
                ]
            ],
            [
                'no_assunto' => 'DIREITO PROCESSUAL PENAL',
                'filhos' => [
                    ['no_assunto' => 'INTRODUÇÃO AO PROCESSO PENAL'],
                    ['no_assunto' => 'IMPOSIÇÃO DE PENAS'],
                    ['no_assunto' => 'INSTRUMENTALIDADE PROCESSUAL PENAL'],
                ]
            ],
            [
                'no_assunto' => 'DIREITO PROCESSUAL CIVIL',
                'filhos' => [
                    ['no_assunto' => 'INTRODUÇÃO AO DIREITO PROCESSUAL CIVIL'],
                    ['no_assunto' => 'DIREITOS E DEVERES CIVIS'],
                    ['no_assunto' => ''],
                ]
            ],
            [
                'no_assunto' => 'ATUALIDADES',
                'filhos' => [
                    ['no_assunto' => 'ASSUNTOS GERAIS'],
                    ['no_assunto' => 'ASSUNTOS NO BRASIL'],
                    ['no_assunto' => 'ASSUNTOS NO EXTERIOR'],
                ]
            ],
            [
                'no_assunto' => 'MATEMÁTICA FINANCEIRA',
                'filhos' => [
                    ['no_assunto' => 'INTRODUÇÃO A MATEMÁTICA FINANCEIRA'],
                    ['no_assunto' => 'MATEMÁTICA FINANCEIRA I'],
                    ['no_assunto' => 'MATEMÁTICA FINANCEIRA II'],
                ]
            ],
        ];
    }
}
