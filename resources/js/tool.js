Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'nova-surveyor',
            path: '/nova-surveyor',
            component: require('./components/Tool'),
        },
    ])
})
