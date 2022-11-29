try {
    const response = await fetch(`${sscompostela.apiUrl}/center`, {
        method: 'GET',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
        },
    });

    if (!response.ok) {
        throw new Error();
    }

    const list = await response.json();

    for (const item of list.data) {

        
    }
    



} catch (error) {
    console.error(error);
}