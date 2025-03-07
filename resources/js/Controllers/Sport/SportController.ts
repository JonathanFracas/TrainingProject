import ExerciseType, {RawExerciseType} from "@/Models/Musculation/ExerciseType";
import axios from "axios";
import HiitType, {RawHiitType} from "@/Models/Hiit/HiitType";
import MusculationExercise from "@/Models/Musculation/MusculationExercise";
import HiitSession from "@/Models/Hiit/HiitSession";
import dayjs from "dayjs";
import SportType, {RawSportType} from "@/Models/Sport/SportType";
import SportSession from "@/Models/Sport/SportSession";


export default class SportController
{
	public static async getSportTypes(): Promise<HiitType[]>
	{
		let sportTypes: SportType[] = [];
		const response = await axios.get<RawSportType[]>(`/api/sport/getSportTypes/`);

		response.data.forEach((sportType) => {
			sportTypes.push((new SportType()).parse(sportType));
		});

		return sportTypes;
	}

	public static async saveSportType(newSportType: SportType): Promise<void>
	{
		await axios.post<void>(`/api/sport/saveSportType/${newSportType}`, newSportType);
	}

	public static async saveSportSession(newSportSession: SportSession): Promise<void>
	{
		await axios.post<void>(`/api/sport/saveSportSession/${newSportSession}`, newSportSession)
	}
}
