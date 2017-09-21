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
	'app_create' => 'Toevoegen',
	'app_save' => 'Opslaan',
	'app_edit' => 'Bewerken',
	'app_view' => 'Bekijken',
	'app_update' => 'Bijwerken',
	'app_list' => 'Lijst',
	'app_no_entries_in_table' => 'Geen inhoud gevonden',
	'app_custom_controller_index' => 'Custom controller index.',
	'app_logout' => 'Logout',
	'app_add_new' => 'Toevoegen',
	'app_are_you_sure' => 'Ben je zeker?',
	'app_back_to_list' => 'Terug naar lijst',
	'app_dashboard' => 'Boordtabel',
	'app_delete' => 'Verwijderen',
	'app_restore' => 'Herstellen',
	'app_permadel' => 'Definitief verwijderen',
	'app_all' => 'Alle',
	'app_trash' => 'Prullenbak',
	'app_delete_selected' => 'Geselecteerde verwijderen',
	'app_category' => 'Categorie',
	'app_categories' => 'Categoriën',
	'app_questions' => 'Vragen',
	'app_question' => 'Vraag',
	'app_answer' => 'Antwoord',
	'app_sample_question' => 'Demo vraag',
	'app_sample_answer' => 'Demo antwoord',
	'app_faq_management' => 'FAQ beheer',
	'app_administrator_can_create_other_users' => 'Beheerder (kan gebruikers toevoegen)',
	'app_simple_user' => 'Gewone gebruiker',
	'app_title' => 'Titel',
	'app_roles' => 'Rollen',
	'app_role' => 'Rol',
	'app_user_management' => 'Gebruikersbeheer',
	'app_users' => 'Gebruikers',
	'app_user' => 'Gebruiker',
	'app_name' => 'Naam',
	'app_email' => 'E-mail',
	'app_password' => 'Paswoord',
	'app_remember_token' => 'Herinneringstoken',
	'app_permissions' => 'Toelatingen',
	'app_user_actions' => 'Gebruikeracties',
	'app_action' => 'Actie',
	'app_action_model' => 'Actie model',
	'app_action_id' => 'Actie id',
	'app_time' => 'Tijdstip',
	'app_campaign' => 'Campagne',
	'app_campaigns' => 'Campagnes',
	'app_description' => 'Omschrijving',
	'app_valid_from' => 'Geldig van',
	'app_valid_to' => 'Geldig tot',
	'app_discount_amount' => 'Bedrag korting',
	'app_discount_percent' => 'Percentage korting',
	'app_coupons_amount' => 'Bedrag coupon',
	'app_coupons' => 'Coupons',
	'app_code' => 'Code',
	'app_redeem_time' => 'Inlevertijd',
	'app_coupon_management' => 'Couponbeheer',
	'app_time_management' => 'Tijdmanagement',
	'app_projects' => 'Projecten',
	'app_reports' => 'Rapporten',
	'app_sample_category' => 'Demo categorie',
	'app_work_type' => 'Soort werk',
	'app_work_types' => 'Soorten werk',
	'app_project' => 'Project',
	'app_start_time' => 'Starttijd',
	'app_end_time' => 'Eindtijd',
	'app_expense_category' => 'Uitgave categorie',
	'app_expense_categories' => 'Uitgave categoriën',
	'app_expense_management' => 'Uitgavebeheer',
	'app_expenses' => 'Uitgaven',
	'app_expense' => 'Uitgave',
	'app_amount' => 'Bedrag',
	'app_income_categories' => 'Inkomst categorieën',
	'app_monthly_report' => 'Maandelijks rapport',
	'app_companies' => 'Bedrijven',
	'app_company_name' => 'Naam bedrijf',
	'app_address' => 'Adres',
	'app_website' => 'Website',
	'app_contact_management' => 'Contactbeheer',
	'app_contacts' => 'Contacten',
	'app_company' => 'Bedrijf',
	'app_first_name' => 'Voornaam',
	'app_last_name' => 'Familienaam',
	'app_phone' => 'Telefoon',
	'app_phone1' => 'Telefoon 1',
	'app_phone2' => 'Teelefoon 2',
	'app_skype' => 'Skype',
	'app_photo' => 'Foto (max. 8mb)',
	'app_category_name' => 'Categorienaam',
	'app_product_management' => 'Productbeheer',
	'app_products' => 'Producten',
	'app_product_name' => 'Productnaam',
	'app_price' => 'Prijs',
	'app_tags' => 'Tags',
	'app_tag' => 'Tag',
	'app_photo1' => 'Foto1',
	'app_photo2' => 'Foto2',
	'app_photo3' => 'Foto3',
	'app_calendar' => 'Kalender',
	'app_statuses' => 'Statuten',
	'app_task_management' => 'Takenbeheer',
	'app_tasks' => 'Taken',
	'app_status' => 'Statuut',
	'app_attachment' => 'Bijlage',
	'app_assigned_to' => 'Toegewezen aan',
	'app_serial_number' => 'Serienummer',
	'app_location' => 'Plaats',
	'app_locations' => 'Plaatsen',
	'app_assigned_user' => 'Toegewezen (gebruiker)',
	'app_notes' => 'Notities',
	'global_title' => 'Ranieri v1',
];