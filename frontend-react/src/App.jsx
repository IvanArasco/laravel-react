import React, { useEffect, useState } from 'react';
import api from './api';

const App = () => {
    const [cars, setCars] = useState([]);

    useEffect(() => {
        api.get('/cars') // Llama al endpoint del backend
            .then((response) => setCars(response.data))
            .catch((error) => console.error('Error fetching cars:', error));
    }, []);

    return (
        <div>
            <h1>Listado de Coches</h1>
            <ul>
                {cars.map((car) => (
                    <li key={car.id}>
                        {car.name} - {car.brand} ({car.year})
                    </li>
                ))}
            </ul>
        </div>
    );
};

export default App;