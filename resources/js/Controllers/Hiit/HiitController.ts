import ExerciseType, {RawExerciseType} from "@/Models/Musculation/ExerciseType";
import axios from "axios";
import HiitType, {RawHiitType} from "@/Models/Hiit/HiitType";
import MusculationExercise from "@/Models/Musculation/MusculationExercise";
import HiitSession from "@/Models/Hiit/HiitSession";
import dayjs from "dayjs";


export default class HiitController
{
	public static async getHiitTypes(): Promise<HiitType[]>
	{
		let hiitTypes: HiitType[] = [];
		const response = await axios.get<RawHiitType[]>(`/api/hiit/getHiitTypes/`);

		response.data.forEach((hiitType) => {
			hiitTypes.push((new HiitType()).parse(hiitType));
		});

		return hiitTypes;
	}

	public static async saveHiitType(newHiitType: HiitType): Promise<void>
	{
		await axios.post<void>(`/api/hiit/saveHiitType/${newHiitType}`, newHiitType);
	}

	public static async saveHiitSession(newHiitSession: HiitSession): Promise<void>
	{
		await axios.post<void>(`/api/hiit/saveHiitSession/${newHiitSession}`, newHiitSession)
	}
}
