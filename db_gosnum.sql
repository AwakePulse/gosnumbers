--
-- PostgreSQL database dump
--

-- Dumped from database version 11.14
-- Dumped by pg_dump version 11.14

-- Started on 2024-08-04 14:09:37

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 196 (class 1259 OID 16495)
-- Name: guvernmentnum_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.guvernmentnum_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.guvernmentnum_id_seq OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 197 (class 1259 OID 16497)
-- Name: guvernmentnum; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.guvernmentnum (
    id bigint DEFAULT nextval('public.guvernmentnum_id_seq'::regclass) NOT NULL,
    first_series character varying(1) NOT NULL,
    registration_number integer NOT NULL,
    second_series character varying(2) NOT NULL,
    region_code integer NOT NULL,
    additional_information character varying(500),
    owner_id integer
);


ALTER TABLE public.guvernmentnum OWNER TO postgres;

--
-- TOC entry 199 (class 1259 OID 16538)
-- Name: num_owners; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.num_owners (
    id bigint NOT NULL,
    first_name character varying(50) NOT NULL,
    second_name character varying(50) NOT NULL,
    patronymic character varying(50) NOT NULL,
    data_of_birth date,
    citizenship character varying(50) DEFAULT 'rus'::character varying
);


ALTER TABLE public.num_owners OWNER TO postgres;

--
-- TOC entry 198 (class 1259 OID 16536)
-- Name: num_owners_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.num_owners_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.num_owners_id_seq OWNER TO postgres;

--
-- TOC entry 2843 (class 0 OID 0)
-- Dependencies: 198
-- Name: num_owners_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.num_owners_id_seq OWNED BY public.num_owners.id;


--
-- TOC entry 200 (class 1259 OID 16597)
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- TOC entry 201 (class 1259 OID 16599)
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id integer DEFAULT nextval('public.users_id_seq'::regclass) NOT NULL,
    second_name character varying(50) NOT NULL,
    first_name character varying(25) NOT NULL,
    email character varying(255) NOT NULL,
    login character varying(50) NOT NULL,
    password character varying(50) NOT NULL,
    avatar character varying(500) DEFAULT '../img/new_profile.png'::character varying,
    citizenship text DEFAULT 'rus'::text
);


ALTER TABLE public.users OWNER TO postgres;

--
-- TOC entry 2700 (class 2604 OID 16541)
-- Name: num_owners id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.num_owners ALTER COLUMN id SET DEFAULT nextval('public.num_owners_id_seq'::regclass);


--
-- TOC entry 2833 (class 0 OID 16497)
-- Dependencies: 197
-- Data for Name: guvernmentnum; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.guvernmentnum (id, first_series, registration_number, second_series, region_code, additional_information, owner_id) VALUES (2, 'а', 0, 'аа', 26, 'а000аа', 2);
INSERT INTO public.guvernmentnum (id, first_series, registration_number, second_series, region_code, additional_information, owner_id) VALUES (3, 'а', 1, 'аа', 126, 'а001аа', 3);
INSERT INTO public.guvernmentnum (id, first_series, registration_number, second_series, region_code, additional_information, owner_id) VALUES (4, 'а', 2, 'аа', 26, 'а002аа', 4);
INSERT INTO public.guvernmentnum (id, first_series, registration_number, second_series, region_code, additional_information, owner_id) VALUES (5, 'а', 3, 'аа', 126, 'а003аа', 2);
INSERT INTO public.guvernmentnum (id, first_series, registration_number, second_series, region_code, additional_information, owner_id) VALUES (6, 'а', 4, 'аа', 26, 'а004аа', 2);
INSERT INTO public.guvernmentnum (id, first_series, registration_number, second_series, region_code, additional_information, owner_id) VALUES (7, 'б', 0, 'бб', 26, 'б000бб', 3);
INSERT INTO public.guvernmentnum (id, first_series, registration_number, second_series, region_code, additional_information, owner_id) VALUES (8, 'б', 1, 'бб', 126, 'б001бб', 3);
INSERT INTO public.guvernmentnum (id, first_series, registration_number, second_series, region_code, additional_information, owner_id) VALUES (9, 'б', 2, 'бб', 126, 'б002бб', 4);
INSERT INTO public.guvernmentnum (id, first_series, registration_number, second_series, region_code, additional_information, owner_id) VALUES (10, 'б', 3, 'бб', 126, 'б003бб', 4);
INSERT INTO public.guvernmentnum (id, first_series, registration_number, second_series, region_code, additional_information, owner_id) VALUES (11, 'б', 4, 'бб', 26, 'б004бб', 4);
INSERT INTO public.guvernmentnum (id, first_series, registration_number, second_series, region_code, additional_information, owner_id) VALUES (12, 'в', 0, 'вв', 26, 'в000вв', 5);
INSERT INTO public.guvernmentnum (id, first_series, registration_number, second_series, region_code, additional_information, owner_id) VALUES (13, 'в', 1, 'вв', 126, 'в001вв', 5);
INSERT INTO public.guvernmentnum (id, first_series, registration_number, second_series, region_code, additional_information, owner_id) VALUES (14, 'в', 2, 'вв', 126, 'в002вв', 5);
INSERT INTO public.guvernmentnum (id, first_series, registration_number, second_series, region_code, additional_information, owner_id) VALUES (15, 'в', 3, 'вв', 26, 'в003вв', 5);
INSERT INTO public.guvernmentnum (id, first_series, registration_number, second_series, region_code, additional_information, owner_id) VALUES (16, 'в', 4, 'вв', 126, 'в004вв', 5);


--
-- TOC entry 2835 (class 0 OID 16538)
-- Dependencies: 199
-- Data for Name: num_owners; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.num_owners (id, first_name, second_name, patronymic, data_of_birth, citizenship) VALUES (1, 'Admin', 'Admin', 'Adminvich', '2002-01-01', 'rus');
INSERT INTO public.num_owners (id, first_name, second_name, patronymic, data_of_birth, citizenship) VALUES (2, 'Иван', 'Иванушка
', 'Дурачков', '2000-12-24', 'rus');
INSERT INTO public.num_owners (id, first_name, second_name, patronymic, data_of_birth, citizenship) VALUES (3, 'Тест', 'Тестов', 'Тестович', '1982-04-30', 'rus');
INSERT INTO public.num_owners (id, first_name, second_name, patronymic, data_of_birth, citizenship) VALUES (4, 'Сергей', 'Сидоров', 'Сергеевич', '2002-07-09', 'rus');
INSERT INTO public.num_owners (id, first_name, second_name, patronymic, data_of_birth, citizenship) VALUES (5, 'Роман', 'Пархоменко', 'Евгеньевич', '2002-06-04', 'rus');
INSERT INTO public.num_owners (id, first_name, second_name, patronymic, data_of_birth, citizenship) VALUES (6, 'Шишка', 'Шишков', 'Шишкович', '2000-11-11', 'rus');
INSERT INTO public.num_owners (id, first_name, second_name, patronymic, data_of_birth, citizenship) VALUES (7, 'Авраам', 'Линкольн', 'Степанович', '1985-12-09', 'rus');
INSERT INTO public.num_owners (id, first_name, second_name, patronymic, data_of_birth, citizenship) VALUES (8, 'Александр', 'Степнов', 'Валерьевич', '2001-06-12', 'rus');
INSERT INTO public.num_owners (id, first_name, second_name, patronymic, data_of_birth, citizenship) VALUES (9, 'Павел', 'Икарус', 'Дамирович', '1992-10-14', 'rus');
INSERT INTO public.num_owners (id, first_name, second_name, patronymic, data_of_birth, citizenship) VALUES (10, 'Нэйтон', 'Гулд', 'Гулд', '1984-02-01', 'rus');


--
-- TOC entry 2837 (class 0 OID 16599)
-- Dependencies: 201
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.users (id, second_name, first_name, email, login, password, avatar, citizenship) VALUES (2, 'Пархоменко', 'Роман', 'parkhomienko-02@list.ru', 'Awake', 'c98703aed69284552ffffea25a1706d9', '../img/new_profile.png', 'rus');
INSERT INTO public.users (id, second_name, first_name, email, login, password, avatar, citizenship) VALUES (3, 'Сидоров', 'Сергей', 'sidser@mail.ru', 'Sidorovv', 'c8837b23ff8aaa8a2dde915473ce0991', '../img/new_profile.png', 'rus');
INSERT INTO public.users (id, second_name, first_name, email, login, password, avatar, citizenship) VALUES (4, 'Крутышка', 'Маришка', 'kruto@mail.ru', 'Marishka', '81dc9bdb52d04dc20036dbd8313ed055', '../img/new_profile.png', 'rus');
INSERT INTO public.users (id, second_name, first_name, email, login, password, avatar, citizenship) VALUES (5, 'Админ', 'Админчик', 'admin@mail.ru', 'Admin', 'b59c67bf196a4758191e42f76670ceba', '../img/new_profile.png', 'rus');


--
-- TOC entry 2844 (class 0 OID 0)
-- Dependencies: 196
-- Name: guvernmentnum_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.guvernmentnum_id_seq', 16, true);


--
-- TOC entry 2845 (class 0 OID 0)
-- Dependencies: 198
-- Name: num_owners_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.num_owners_id_seq', 10, true);


--
-- TOC entry 2846 (class 0 OID 0)
-- Dependencies: 200
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 5, true);


--
-- TOC entry 2706 (class 2606 OID 16502)
-- Name: guvernmentnum guvernmentnum_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.guvernmentnum
    ADD CONSTRAINT guvernmentnum_pkey PRIMARY KEY (id);


--
-- TOC entry 2708 (class 2606 OID 16544)
-- Name: num_owners num_owners_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.num_owners
    ADD CONSTRAINT num_owners_pkey PRIMARY KEY (id);


--
-- TOC entry 2710 (class 2606 OID 16607)
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


-- Completed on 2024-08-04 14:09:37

--
-- PostgreSQL database dump complete
--

