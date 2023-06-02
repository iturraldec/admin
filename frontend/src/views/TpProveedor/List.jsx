import { useEffect, useState } from "react";
import DataTable from 'react-data-table-component';

//
const columns = [
  {
    name: 'Id',
    selector: row => row.id,
  },
  {
    name: 'Nombre',
    selector: row => row.title,
    sortable: true
  }
];

//
const paginationComponentOptions = {
  rowsPerPageText: 'Filas por página',
  rangeSeparatorText: 'de',
  selectAllRowsItem: true,
  selectAllRowsItemText: 'Todos',
};

//
export default function List() {
  const [tipos, setTipos] = useState([]);

  //
  useEffect(function() {
    async function getData() {
      await fetch('https://jsonplaceholder.typicode.com/posts')
              .then(response => response.json())
              .then(json => setTipos(json));
    }

    getData();
  }, []);

  
  //
  return (
    <>
      <h1>listado de tipos de proveedores</h1>
      {tipos && <DataTable
                  columns={columns}
                  data={tipos}
                  pagination
                  paginationComponentOptions={paginationComponentOptions}
                />}      
    </>
  )
}
