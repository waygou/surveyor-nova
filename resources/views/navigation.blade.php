<h3 class="flex items-center font-normal text-white mb-6 text-base no-underline">
    <svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path fill="var(--sidebar-icon)"
              d="M19 11a7.5 7.5 0 0 1-3.5 5.94L10 20l-5.5-3.06A7.5 7.5 0 0 1 1 11V3c3.38 0 6.5-1.12 9-3 2.5 1.89 5.62 3 9 3v8zm-9 1.08l2.92 2.04-1.03-3.41 2.84-2.15-3.56-.08L10 5.12 8.83 8.48l-3.56.08L8.1 10.7l-1.03 3.4L10 12.09z"/>
    </svg>
    <span class="sidebar-label">
        Surveyor
    </span>
</h3>

<ul class="list-reset mb-8">

    <li class="leading-wide mb-4 text-sm">
        <router-link :to="{
            name: 'index',
            params: {
                resourceName: 'profiles'
            }
        }" class="text-white ml-8 no-underline dim">
            Profiles
        </router-link>
    </li>

    <li class="leading-wide mb-4 text-sm">
        <router-link :to="{
            name: 'index',
            params: {
                resourceName: 'policies'
            }
        }" class="text-white ml-8 no-underline dim">
            Policies
        </router-link>
    </li>

    <li class="leading-wide mb-4 text-sm">
        <router-link :to="{
            name: 'index',
            params: {
                resourceName: 'scopes'
            }
        }" class="text-white ml-8 no-underline dim">
            Scopes
        </router-link>
    </li>

</ul>