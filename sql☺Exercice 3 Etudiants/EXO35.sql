SELECT matricule, code, note, (note*2) as note_sur_40
FROM examen 
ORDER BY matricule, code ASC