CREATE TABLE
    IF NOT EXISTS `tbl_client_briefing` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `client_id` int(11) NOT NULL,
        `question_1` text,
        `question_2` text,
        `question_3` text,
        `question_4` text,
        `question_5` text,
        `question_6` text,
        `question_7` text,
        `question_8` text,
        `question_9` text,
        `question_10` text,
        `question_11` text,
        `question_12` text,
        `question_13` text,
        `question_14` text,
        `question_15` text,
        `question_16` text,
        `question_17` text,
        `question_18` text,
        `question_19` text,
        `question_20` text,
        -- Adicione mais campos para cada pergunta do briefing
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;