--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.14
-- Dumped by pg_dump version 9.5.14

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: registro; Type: TABLE; Schema: public; Owner: banda
--

CREATE TABLE public.registro (
    id bigint NOT NULL,
    tec text,
    responsable text,
    instructor text
);


ALTER TABLE public.registro OWNER TO banda;

--
-- Name: registro_id_seq; Type: SEQUENCE; Schema: public; Owner: banda
--

CREATE SEQUENCE public.registro_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.registro_id_seq OWNER TO banda;

--
-- Name: registro_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: banda
--

ALTER SEQUENCE public.registro_id_seq OWNED BY public.registro.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: banda
--

ALTER TABLE ONLY public.registro ALTER COLUMN id SET DEFAULT nextval('public.registro_id_seq'::regclass);


--
-- Data for Name: registro; Type: TABLE DATA; Schema: public; Owner: banda
--

COPY public.registro (id, tec, responsable, instructor) FROM stdin;
5	dfmodjfid	fjdifjdif	fnjeijfej
6	dudbjbdjkbsd	dniendieni	cmdcdomcodmc
8	dslc,dsoc	ddlc,docod	lcxlcmlxmcolx
13	Instituto Tecnológico Superior de Escárcega	Ballina	Leonardo
15	dfrf	ded	ads
18	cdclds	dcsmcls	sdxmlsmd
21	jdgcjdg	bkshdk	ebsjd
24	escarsega 	manuel	jose
25			
26			
\.


--
-- Name: registro_id_seq; Type: SEQUENCE SET; Schema: public; Owner: banda
--

SELECT pg_catalog.setval('public.registro_id_seq', 26, true);


--
-- Name: registro_pkey; Type: CONSTRAINT; Schema: public; Owner: banda
--

ALTER TABLE ONLY public.registro
    ADD CONSTRAINT registro_pkey PRIMARY KEY (id);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

