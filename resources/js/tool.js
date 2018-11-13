Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'surveyor-nova',
            path: '/surveyor-nova',
            component: require('./components/Tool'),
        },
    ])
})
