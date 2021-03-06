<?php

return [
		'user-management' => [		'title' => 'Gerenciamento de usuários',		'fields' => [		],	],
		'permissions' => [		'title' => 'Permissões',		'fields' => [			'title' => 'Título',		],	],
		'roles' => [		'title' => 'Regras',		'fields' => [			'title' => 'Título',			'permission' => 'Permissões',		],	],
		'users' => [		'title' => 'Usuários',		'fields' => [			'name' => 'Nome',			'email' => 'E-mail',			'password' => 'Senha',			'role' => 'Regra',			'remember-token' => 'Lembrar Senha',		],	],
		'client-management' => [		'title' => 'Gerenciamento de clientes',		'fields' => [		],	],
		'client-management-settings' => [		'title' => 'Configurações de gerenciamento de clientes',		'fields' => [		],	],
		'client-currencies' => [		'title' => 'Moedas',		'fields' => [			'title' => 'Título',			'code' => 'Código',			'main-currency' => 'Moeda principal',		],	],
		'client-transaction-types' => [		'title' => 'Tipos de transação',		'fields' => [			'title' => 'Título',		],	],
		'client-income-sources' => [		'title' => 'Fontes de entrada',		'fields' => [			'title' => 'Título',			'fee-percent' => 'Percentual de taxa',		],	],
		'client-statuses' => [		'title' => 'Status do cliente',		'fields' => [			'title' => 'Título',		],	],
		'client-project-statuses' => [		'title' => 'Status do projeto',		'fields' => [			'title' => 'Título',		],	],
		'clients' => [		'title' => 'Clientes',		'fields' => [			'first-name' => 'Primeiro nome',			'last-name' => 'Último nome',			'company-name' => 'Empresa',			'email' => 'E-mail',			'phone' => 'Telefone',			'website' => 'Website',			'skype' => 'Skype',			'country' => 'País',			'client-status' => 'Status do cliente',		],	],
		'client-projects' => [		'title' => 'Projetos',		'fields' => [			'title' => 'Título',			'client' => 'Cliente',			'description' => 'Descrição',			'date' => 'Data de início',			'budget' => 'Orçamento',			'project-status' => 'Status do projeto',		],	],
		'client-notes' => [		'title' => 'Notas',		'fields' => [			'project' => 'Projeto',			'text' => 'Texto da nota',		],	],
		'client-documents' => [		'title' => 'Documentos',		'fields' => [			'project' => 'Projeto',			'title' => 'Título',			'description' => 'Descrição',			'file' => 'Arquivo',		],	],
		'client-transactions' => [		'title' => 'Transações',		'fields' => [			'project' => 'Projeto',			'transaction-type' => 'Tipo de transação',			'income-source' => 'Fonte de entrada',			'title' => 'Título',			'description' => 'Descrição',			'amount' => 'Quantidade',			'currency' => 'Moeda',			'transaction-date' => 'Data da transação',		],	],
		'client-reports' => [		'title' => 'Relatórios',		'fields' => [		],	],
		'expense-management' => [		'title' => 'Gerenciamento de Despesa',		'fields' => [		],	],
		'expense-category' => [		'title' => 'Categorias de Despesa',		'fields' => [			'name' => 'Nome',		],	],
		'income-category' => [		'title' => 'Categorias de entrada',		'fields' => [			'name' => 'Name',		],	],
		'income' => [		'title' => 'Income',		'fields' => [			'income-category' => 'Income Category',			'entry-date' => 'Entry date',			'amount' => 'Amount',		],	],
		'expense' => [		'title' => 'Despesas',		'fields' => [			'expense-category' => 'Categoria de Despesa',			'entry-date' => 'Data de entrada',			'amount' => 'Quantidade',		],	],
		'monthly-report' => [		'title' => 'Relatório mensal',		'fields' => [		],	],
		'content-management' => [		'title' => 'Gerenciamento de conteúdo',		'fields' => [		],	],
		'content-categories' => [		'title' => 'Categorias',		'fields' => [			'title' => 'Categoria',			'slug' => 'Slug',		],	],
		'content-tags' => [		'title' => 'Tags',		'fields' => [			'title' => 'Tag',			'slug' => 'Slug',		],	],
		'content-pages' => [		'title' => 'Páginas',		'fields' => [			'title' => 'Título',			'category-id' => 'Categorias',			'tag-id' => 'Tags',			'page-text' => 'Texto',			'excerpt' => 'Resumo',			'featured-image' => 'Imagem em destaque',		],	],
		'task-management' => [		'title' => 'Gerenciamento de tarefas',		'fields' => [		],	],
		'task-statuses' => [		'title' => 'Status',		'fields' => [			'name' => 'Nome',		],	],
		'task-tags' => [		'title' => 'Tags',		'fields' => [			'name' => 'Nome',		],	],
		'tasks' => [		'title' => 'Tarefas',		'fields' => [			'name' => 'Nome',			'description' => 'Descrição',			'status' => 'Status',			'tag' => 'Tags',			'attachment' => 'Anexo',			'due-date' => 'Data de vencimento',			'user' => 'Atribuído',		],	],
		'task-calendar' => [		'title' => 'Calendário',		'fields' => [		],	],
		'internal-notifications' => [		'title' => 'Notifications',		'fields' => [			'text' => 'Text',			'link' => 'Link',			'users' => 'Users',		],	],
	'app_create' => 'Créer',
	'app_save' => 'Sauver',
	'app_edit' => 'Modifier',
	'app_restore' => 'Restaurer',
	'app_permadel' => 'Supprimer définitivement',
	'app_all' => 'Tous',
	'app_trash' => 'Poubelle',
	'app_view' => 'Voir',
	'app_update' => 'Mettre à jour',
	'app_list' => 'Liste',
	'app_logout' => 'Déconnexion',
	'app_add_new' => 'Nouveau',
	'app_are_you_sure' => 'Êtes-vous certain ?',
	'app_back_to_list' => 'Retour à la liste',
	'app_dashboard' => 'Tableau de bord',
	'app_delete' => 'Supprimer',
	'app_delete_selected' => 'Supprimer sélectionnés',
	'app_category' => 'Catégorie',
	'app_categories' => 'Catégories',
	'app_please_select' => 'Slectionner',
	'global_title' => 'Ranieri v1',
];