import { usePage } from '@inertiajs/vue3'
import { UserTypeEnum } from '@/utils/userTypeEnum';

export const isCompanyUser = () => {
    const { auth } = usePage().props;

    if (!auth.user) {
        return false;
    }
    const userType = auth.user.user_type || '';
    return userType === UserTypeEnum.COMPANY;
};