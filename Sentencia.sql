insert into rrandom (select * from registro limit 1);
  DELETE FROM registro WHERE id IN (SELECT id FROM registro LIMIT 1);
